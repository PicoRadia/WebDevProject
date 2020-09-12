function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650 ');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}

function zoomin() {
    var myImg = document.getElementById("map");
    var currWidth = myImg.clientWidth;
    if (currWidth == 2500) return false;
    else {
      myImg.style.width = (currWidth + 100) + "px";
    }
  }
  
  function zoomout() {
    var myImg = document.getElementById("map");
    var currWidth = myImg.clientWidth;
    if (currWidth == 100) return false;
    else {
      myImg.style.width = (currWidth - 100) + "px";
    }
  }
  
  document.getElementById(element).addEventListener("click", function(){
    //statement for function
    });
    var cls=document.getElementById(id_of_element).className;
    var list=['one','two','three','four','five'];
    list.forEach(function(element) {
    document.getElementById(element).addEventListener("click", function(){
    var cls=document.getElementById(element).className;
    if(cls.includes("unchecked"))
    {
    document.getElementById(element).classList.remove("unchecked");
    document.getElementById(element).classList.add("checked");
    }
    else
    {
    document.getElementById(element).classList.remove("checked"); document.getElementById(element).classList.add("unchecked");
    }
    });
    });