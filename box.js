    var ostanha=document.getElementById("ostan");
    var option=new Option("اصفهان","اصفهان");
    ostanha.options.add(option);
    var option=new Option("تهران","تهران");
    ostanha.options.add(option);
    var option=new Option("مازندران","مازندران");
    ostanha.options.add(option);
    var option=new Option("خراسان","خراسان");
    ostanha.options.add(option);
    function setShahr(){
        //ورودی
        var ostanha=document.getElementById("ostan");
        var shahrha=document.getElementById("shahr");
        //برنامه و خروجی
        while (shahrha.options.length){
            shahrha.remove(0);
        }
        var option=new Option("انتخاب کنید...","انتخاب کنید...");
        option.hidden=true;
        shahrha.options.add(option);
        if (ostanha.value=="تهران"){
            var option=new Option("تهران","تهران");
            shahrha.options.add(option);
            var option=new Option("شهرری","شهرری");
            shahrha.options.add(option);
        }
        if (ostanha.value=="اصفهان"){
            var option=new Option("اصفهان","اصفهان");
            shahrha.options.add(option);
            var option=new Option("نجف آباد","نجف آباد");
            shahrha.options.add(option);
            var option=new Option("میمه","میمه");
            shahrha.options.add(option);
            var option=new Option("تیران و کرون","تیران و کرون");
            shahrha.options.add(option);
            var option=new Option("خمینی شهر","خمینی شهر");
            shahrha.options.add(option);
        }
    }