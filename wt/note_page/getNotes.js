function scriptt(){

var xmlHTTP = new XMLHttpRequest();

   // this will run when the document is loaded
   $( document ).ready(function() {

    var url = "note.php";

 
    xmlHTTP.open("GET", url, true);

    xmlHTTP.onreadystatechange = function()
    {
        if(xmlHTTP.readyState == 4 && xmlHTTP.status == 200) {
            //alert(xmlHTTP.responseText);
            //var myData = xmlHTTP.responseText;
            var myData =  JSON.parse( xmlHTTP.responseText ); //res.text()



             $.each(myData, function(){
                 for (let index = 0; index < myData.length; index++) {
                     //const element = array[index];
                     
                     $html =     '<div class="col-md-4 single-note-item all-category"><div class="card card-body">' +
                     '<span class="side-stick"></span>' +
                     '<h5 class="note-title text-truncate w-75 mb-0" data-noteHeading="'+myData[index]["nTitle"] +'">'+myData[index]["nTitle"] +'</h5>' +
                     '<p class="note-date font-12 text-muted">'+myData[index]["nDate"]+'</p>' +
                     '<div class="note-content">' +
                         '<p class="note-inner-content text-muted" data-noteContent="'+myData[index]["nDescription"] +'">'+myData[index]["nDescription"]+'</p>' +
                     '</div>' +
                     '<div class="d-flex align-items-center">' +
                        
                         '<span class="mr-1"><i class="fa fa-trash remove-note" "></i></span>' +
                         
                     '</div>' +
                     '</div> ';
                     
                     $("#note-full-container").prepend($html);

                 }


           

             })
        }
    }





// xmlHTTP.onload = function() {
//     var myData = JSON.parse(this.responseText);
//     $.each(myData, function(){




// });

// };


xmlHTTP.send();
});
}