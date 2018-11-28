$( document ).ready(function() {
  
    // submit form function
    $(".submit-a-quote").on('submit', function(event) {
        event.preventDefault();

        //get the author and the quote from the form
        const submitAuthor = $('.submit-author').val(); // val means to get the value
        const submitQuote = $('.submit-quote').val();
        const submitSource = $('.submit-source').val();
        const submitURL = $('.submit-url').val();  

        //ajax request to post your data to the server and or wordpress
        $.ajax({
            method: 'POST', //we want to post it to the server
            url: red_vars.rest_url + 'wp/v2/posts',
            data: { //data being passed to served
                title : submitAuthor, //author ref in json file
                content : submitQuote,
                _qod_quote_source : submitSource,
                link: submitURL,
                comment_status: 'closed'
            },
            beforeSend: function(xhr) { //for security
                xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
            }
        }).done( function(response) { 
            console.log("Submitting Post!");
            alert('Thankyou for Submitting!.');
        });
    });


    //get quote function
    $('.get-quote-button').on('click', function() {

        const quote = $(".quote");
        const author = $(".author");
        // const source = $(".source");
        
        $.ajax({
            method: 'GET',
            url: red_vars.rest_url + "/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1"
        }).done(result => {
            console.log(result);
            // quote.html(result[0].content.rendered); 
            author.html("— " + result[0].title.rendered);
            $(".quote > p").css("margin-top", "0rem");
            if (result[0]._qod_quote_source_url) {
                author.html("— " + result[0].title.rendered +","+ "&nbsp"+ "<a href="+ result[0]._qod_quote_source_url +">"+ result[0]._qod_quote_source +"</a>");
            } else if (result[0]._qod_quote_source){
                author.html("— " + result[0].title.rendered +", "+ result[0]._qod_quote_source);
            } else {
                author.html("— " + result[0].title.rendered);
            }
        });
    });
  
//   //email validation function
//   function validateEmail(email) {
//     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
//   }
  
//   function validate() {
//     //declare subscribe input as the emal
//     var email = $(".submit-button").val();
  
//     //if email is valid or invalid display an alert
//     if (validateEmail(email)) {
//       alert("Thanks for subscribing!");
//     } else {
//       alert("Please enter a valid email.");
//     }
//     return false;
//   }

//   //on click submit the email for validation
//   $("#contactSubmitButton").bind("click", validate);
  
});