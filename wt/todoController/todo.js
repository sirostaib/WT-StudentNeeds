function scripttt(){

    var xmlHTTP = new XMLHttpRequest();
    
       // this will run when the document is loaded
       $( document ).ready(function() {
    
        var url = "todo.php";
    
     
        xmlHTTP.open("get", url, true);
    
        xmlHTTP.onreadystatechange = function()
        {
            if(xmlHTTP.readyState == 4 && xmlHTTP.status == 200) {
                alert( "slaw" + xmlHTTP.responseText );
                //var myData = xmlHTTP.responseText;
                var myData =  JSON.parse( xmlHTTP.responseText ); //res.text()
    
    
    
                 $.each(myData, function(){
    
    
                $html =     
          

                '<div class="col-12 col-md-6 col-lg-4">'+
                                  '  <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">'+
                                    ' <div class="timeline-text">'+
                                          '  <h6>'+this["tTitle"]+'</h6>'+
                                         '   <div contenteditable="true"> '+
                                                
                                            '  <p>'+this["tDescription"]+'</p></div> '+
                                           ' <br>'+
                                           ' <button class="btn btn-primary btn-sm">Edit</button> <button class="btn btn-outline-primary btn-sm" >Update</button> <label style="font-size:small;">'+this["tDate"]+'</lable>'+
                                        "</div></div></div>";
                
                $("#myRow").prepend($html);
    
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