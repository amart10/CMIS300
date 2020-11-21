
window.onload = function() {
    banner('#banner', '.text', '.imga')
    
    function banner(parent, controller, mod) {
        var num = 0;
        var controller = $(controller);
        var mod = $(mod);
        var banner = $(parent);
        var autoPlayTime = 2800;
        var imgNum = mod.length - 1;
        var NextPicture;
        Forward();
        Backward();


        function $(name) {
            if (name[0] == '#') {
                return document.getElementById(name.substr(1));
            } else if (name[0] == '.') {
                return document.getElementsByClassName(name.substr(1));
            } else {
                return document.getElementsByTagName(name);
            }
        }


        document.getElementById("prev-btn").onclick = PrevPicture;
        document.getElementById("next-btn").onclick = NextPicture;
        /* //traversethe controller and bind mouseover events
        for (var i = 0; i < controller.length; i++) {
            controller[i].index = i;
            //add crossover to all controllers
            controller[i].onmouseover = function() {
                for (var j = 0; j < controller.length; j++) {
                    //change to the default style
                    controller[j].className = 'nr';
                }
                //change the selected controller style
                this.className = 'nr active';
                for (var x = 0; x < mod.length; x++) {
                    mod[x].className = 'imga';
                }
                mod[this.index].className = 'imga active';
            }
        } */
      
        //image to play
        function play(num) {
            for (var j = 0; j < controller.length; j++) {
                controller[j].className = 'text';
            }
            controller[num].className = 'text active';
            for (var x = 0; x < mod.length; x++) {
                mod[x].className = 'imga';
            }
            mod[num].className = 'imga active';
        }
        //auto play
        function Forward() {
            NextPicture = (function() {
                if (num > imgNum - 1) {
                    num = 0;
                    console.log(num);
                    play(num);
                }
                else{
                num++;
                console.log(num);
                play(num);
                
                } 
            }) 
        }
        function Backward() {
            PrevPicture = (function() {
                if (num <= 0) {
                    num = imgNum + 1;
                }
                num--;
                play(num);
                console.log(num);
                } 
            )
            }
    
    }
}