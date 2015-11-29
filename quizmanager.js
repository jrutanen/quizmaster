/**
 * Created by janirutanen on 2015-11-29.
 */
gameStarted = false;
questionNbr = 0;

function checkStarted(){
    return 0;
}

function drawPage(){
    if (questionNbr == 0 && !gameStarted) {
        signScreen();
    } else if (questionNbr > 0 && !gameStarted) {
        waitScreen();
    } else {
        qNumber = questionNbr;
        questionScreen(qNumber);
    }
}

function signScreen(){
    if (questionNbr == 0 && !gameStarted) {
        signScreen();
    } else if (questionNbr > 0 && !gameStarted) {
        waitScreen();
    } else {
        questionScreen(questionNbr);
    }
}

function waitScreen(){
    if (questionNbr == 0 && !gameStarted) {
        signScreen();
    } else if (questionNbr > 0 && !gameStarted) {
        waitScreen();
    } else {
        questionScreen(questionNbr);
    }
}

function questionScreen(questionNbr){
    if (questionNbr == 0 && !gameStarted) {
        signScreen();
    } else if (questionNbr > 0 && !gameStarted) {
        waitScreen();
    } else {
        questionScreen(questionNbr);
    }
}