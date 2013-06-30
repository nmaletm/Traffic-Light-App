var RED = "#FF0000";
var YELLOW = "#FFFF00";
var GREEN = "#00FF00";
var DARK_RED = "#380000";
var DARK_YELLOW = "#383800";
var DARK_GREEN = "#003800";

var X_ALL = 150;
var Y_RED = 100;
var Y_YELLOW = Y_RED + 150;
var Y_GREEN = Y_YELLOW + 150;

var trafficLightsMachine;


function TrafficLightsMachine() {


    this.drawCircle = function(canvas, color, x, y) {
        var context = canvas.getContext('2d');

        context.strokeStyle = "#000000";
        context.fillStyle = color;
        context.lineWidth=5;
        context.beginPath();
        context.arc(x, y, 60, 0, Math.PI * 2, true);
        context.closePath();
        context.stroke();
        context.fill();

    };

    this.click = function(e){
        var x = e.clientX - $("#canvas").position().left;
        var y = e.clientY - $("#canvas").position().top;

        if(y < Y_RED){
            trafficLightsMachine.switchColor(RED);
        }
        else if(y < Y_YELLOW){
            trafficLightsMachine.switchColor(YELLOW);
        }
        else{
            trafficLightsMachine.switchColor(GREEN);
        }
    }

    this.switchColor = function(color){
        if(color == RED){
            trafficLightsMachine.drawCircles(RED, DARK_YELLOW, DARK_GREEN);
        }
        else if(color == YELLOW){
            trafficLightsMachine.drawCircles(DARK_RED, YELLOW, DARK_GREEN);
        }
        else{
            trafficLightsMachine.drawCircles(DARK_RED, DARK_YELLOW, GREEN);
        }
    }

    this.drawCircles = function(first, second, third) {
        var id = 'canvas';
        var canvas = document.getElementById(id);

        if (canvas.getContext) {
            trafficLightsMachine.drawCircle(canvas, first, X_ALL, Y_RED);
            trafficLightsMachine.drawCircle(canvas, second, X_ALL, Y_YELLOW);
            trafficLightsMachine.drawCircle(canvas, third, X_ALL, Y_GREEN);
        }
    }
}



function init() {
    trafficLightsMachine = new TrafficLightsMachine();
    trafficLightsMachine.drawCircles(DARK_RED, DARK_YELLOW, GREEN);
    $("#canvas").click(trafficLightsMachine.click);
}
