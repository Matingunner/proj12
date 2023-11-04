function set(){
    var x=document.getElementById("txt");
    var y=document.getElementById("out");
    var c="کلمه وجود ندارد";
    switch(x.value){
        case "apple":c="سیب";break;
        case "hi":c="سلام";break;
        case "hello":c="سلام";break;
        case "game":c="بازی";break;
        case "red":c="قرمز";break;
        case "blue":c="آبی";break;
        case "yello":c="زرد";break;
    }
    y.innerHTML=c;
    //funtion set(){
        //ورودی
        //var text=document.getElementById("txt");
        //برنامه
        //var x=text.value;
        //var t="کلمه وجود ندارد";
        //switch(x){
            //case "hello": t="سلام";beeak;
        //}
        //خروجی
        //var p=document.getElementById("out");
        //p=innerHTML=t;
    //}
}   