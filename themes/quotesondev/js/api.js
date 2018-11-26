$( document ).ready(function() {
  
  console.log( "ready!" );
  const quote = $(".quote");
  const author = $(".author");

  $(".get-quote-button").on("click", function() {
      $.ajax({ url: "api/getQuotes", method: "GET"})
          .done(data => {
              quote.html(data.quote); 
              author.html(data.author);
              console.log(data);
          })
          .fail(err => {
              quote.html("New Quote"); 
              author.html("New Author");
              alert("Quote Is Not Found");
              console.error("Failed To Get Quotes", err);
          });   
  })
});