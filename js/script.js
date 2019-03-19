                //-----------------------------------------------------------
                        var grid = [
                        0,
                        100,
                        200,
                        300
                        ];
                        
                       
                         var imgUrls = [
                        "https://i.ibb.co/d4c9fv5/Developers.png",
                        "https://i.ibb.co/JvR9SyX/link3.png",
                        "https://i.ibb.co/PY15jD2/link2.png",
                        "https://i.ibb.co/rddZGvh/link1.png",
                        "https://i.ibb.co/j48GqTW/Integration.png",
                        "https://i.ibb.co/1rC8zBk/Content-Management.png"
                        
                        ];
                         
                        function createImage(_id, _class, _src, container_id,_alt,grid) 
                        {
                            var _img = document.createElement("IMG");
                            //x.setAttribute("height", "200");
                            //x.setAttribute("width", "400");
                            _img.setAttribute("id", _id);
                            _img.setAttribute("class", _class);
                            _img.setAttribute("src", _src);
                            _img.setAttribute("alt", _alt);
                            //  _img.setAttribute("onclick", clickEffect);
                            _img.style.position = "absolute";
                            _img.style.left = grid[Math.floor(Math.random()*grid.length)]+"px";
                            _img.style.top = grid[Math.floor(Math.random()*grid.length)]+"px";
                            container_id.appendChild(_img);
                        }
                        
                        function createDiv(_id, _class,container_id) 
                        {
                            var _div = document.createElement("DIV");
                            _div.setAttribute("id",_id);
                            _div.setAttribute("class", _class);
                            container_id.appendChild(_div);
                            //console.log("fdbvsc");
                        }
                        
                  
                         createDiv("drawing-card", "card", document.getElementById("testCreate"));
                        createDiv("drawing-card-body", "card-body main-card", document.getElementById("drawing-card"));
                        launchDraggableElement();
                        
                        function launchDraggableElement()
                        {
                        for(var i = 0 ; i < 6 ; i++)
                        {
                            //Create divs 
                       
                        createDiv("mydiv"+i, "div", document.getElementById("drawing-card-body"));
                        
                        //Create image 
                        createImage("item-"+i, "item", imgUrls[i], document.getElementById("mydiv"+i),"alt",grid);
                        
                        dragElement(document.getElementById("mydiv"+i));
                        //console.log("mydiv"+i);
                        }
                        }                               
                        function dragElement(elmnt) {
                        var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
                        
                        elmnt.onmousedown = dragMouseDown;
                        
                        
                        function dragMouseDown(e) {
                        e = e || window.event;
                        e.preventDefault();
                        // get the mouse cursor position at startup:
                        pos3 = e.clientX;
                        pos4 = e.clientY;
                        document.onmouseup = closeDragElement;
                        // call a function whenever the cursor moves:
                        document.onmousemove = elementDrag;
                        }
                        
                        function elementDrag(e) {
                        e = e || window.event;
                        e.preventDefault();
                        // calculate the new cursor position:
                        pos1 = pos3 - e.clientX;
                        pos2 = pos4 - e.clientY;
                        pos3 = e.clientX;
                        pos4 = e.clientY;
                        // set the element's new position:
                        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
                        }
                        
                        function closeDragElement() {
                        /* stop moving when mouse button is released:*/
                        document.onmouseup = null;
                        document.onmousemove = null;
                        }
                        }

//timeout hide schema
function hideSchema(){
setTimeout(function(){
    document.getElementById("schema").classList.add('blur');
}, 10000);
}

function showBoard(){
        document.getElementById("playSchemator").style.visibility = "hidden";

setTimeout(function(){
    document.getElementById("presentation").innerHTML = "A toi de jouer !";
    document.getElementById("testCreate").style.visibility = "visible";
}, 10500);
}

function clickEffect(){
    clickEffect0.load();
          clickEffect0.play(); 
        clickEffect0.currentTime = 0;
    
}

