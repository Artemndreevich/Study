let uScore = 0;
let cScore = 0;
const uScore_span = document.getElementById('user-score');
const cScore_span = document.getElementById('computer-score');
const scoreBoard_div = document.querySelector('.score-board');
let result_div = document.querySelector('.result p');
const r_div = document.getElementById('rock');
const p_div = document.getElementById('paper');
const s_div = document.getElementById('scissors');
const smallUserWord = '(гравець)'.fontsize(4).sup();
const smallCompWord = '(ТЕГ)'.fontsize(4).sup();
const fiveRounds_button = document.getElementById('five');
const tenRounds_button = document.getElementById('ten');
const twentyRounds_button = document.getElementById('twenty');
const fiftyRounds_button = document.getElementById('fifty');
let rounds_div = document.getElementById('rounds');
let gameDuration = 0;
const gameResult_div = document.getElementById('game-result');
const gameResult_p = document.querySelector('#game-result p');
let clicks =0;
let roundsNumber_p = document.getElementById('rounds-number');

function getComputerChoice(){
    const choices=['rock', 'paper', 'scissors'];
    const randomNumber = Math.floor(Math.random()*3);
    return choices[randomNumber];
}  

function wordToImage(choice) {
    if (choice=='rock'){
        return `<img src="rock_paper_scissors/images/rock.png" class="small-img">`;
    }
    if (choice=='paper'){
        return `<img src="rock_paper_scissors/images/paper.png" class="small-img">`;
    }
    if (choice=='scissors'){
        return `<img src="rock_paper_scissors/images/scissors.png" class="small-img">`;
    }
}

function win(user, comp){
    
    const uChoice_div = document.getElementById(user);
    uScore++;
    uScore_span.innerHTML = uScore;
    cScore_span.innerHTML = cScore;
    result_div.innerHTML = `${wordToImage(user)}${smallUserWord} перемагає ${wordToImage(comp)}${smallCompWord}. Вы перемогли!`;
    uChoice_div.classList.add('win');
    setTimeout(() => uChoice_div.classList.remove('win') , 500);
      
}


function lose(user, comp){
    
    const uChoice_div = document.getElementById(user);
    cScore++;
    uScore_span.innerHTML = uScore;
    cScore_span.innerHTML = cScore;
    result_div.innerHTML = `${wordToImage(user)}${smallUserWord} програє ${wordToImage(comp)}${smallCompWord}. Вы програли...`;
    uChoice_div.classList.add('lose');
    setTimeout(() => uChoice_div.classList.remove('lose'), 500);

}
function draw(user, comp){
    
    const uChoice_div = document.getElementById(user);
    uScore_span.innerHTML = uScore;
    cScore_span.innerHTML = cScore;
    result_div.innerHTML = `${wordToImage(user)}${smallUserWord} дорівнює ${wordToImage(comp)}${smallCompWord}. Нічия!`;
    uChoice_div.classList.add('draw');
    setTimeout(() => uChoice_div.classList.remove('draw'), 500);
}
function game(userChoice) {
    let winPhrases = [
        'Вітаю з перемогою! Так тримати!',
        'Так не чесно! Вимагаю реванш!((',
        'Очам не вірю, ти що, переміг!? Все-таки тобі іноді щастить :D',
        'Ну добре, в цей раз ти переміг... Але в наступний раз я точно переможу!',
        'Що ж, не мені ж одному перемагати)0))'
    ];
    let lostPhrases = [
        'Лол, ти щойно програв комп`ютеру :P',
        'Хах, я переміг!',
        'Я ж казав що переможу! Ну що, реванш?)',
        'На ізі...',
        'Ура, моя перемога!!!'
    ];
    let equalPhrases = [
        'Та ну, так не цікаво...',
        'Ну тут просто повезло',
        'Я майже виграв!',
        'Фух, мало не програв...',
        'Перемогла дружба))'
    ];
   if (clicks<gameDuration) {
       clicks++;
       const computerChoice = getComputerChoice();
   switch (userChoice + computerChoice) {
        case 'paperrock': 
        case 'rockscissors': 
        case 'scissorspaper': 
        win(userChoice, computerChoice);
        break;
        case 'paperscissors': 
        case 'rockpaper': 
        case 'scissorsrock': 
        lose(userChoice, computerChoice);
        break;
        case 'paperpaper': 
        case 'rockrock': 
        case 'scissorsscissors': 
        draw(userChoice, computerChoice);
        break;
   }
   }
   roundsNumber_p.innerHTML ='Раунд '+clicks;
   if (clicks>=gameDuration) {
    if (uScore>cScore) {
        gameResult_p.innerHTML=`Ви перемогли! Рахунок ${uScore}:${cScore}`+'<br>щоб почати нову гру оновіть сторінку'.fontsize(4);
        setTimeout(() => htmlboyApearance(winPhrases[Math.floor(Math.random()*(winPhrases.length-1))], 'confused'), 1000);  
    }
    if (uScore<cScore) {
        gameResult_p.innerHTML=`Ви програли! Рахунок ${uScore}:${cScore}`+'<br>щоб почати нову гру оновіть сторінку'.fontsize(4);
        setTimeout(() => htmlboyApearance(lostPhrases[Math.floor(Math.random()*(lostPhrases.length-1))], 'good'), 1000);  
    }
    if (uScore===cScore) {
        gameResult_p.innerHTML=`Нічия! Рахунок ${uScore}:${cScore}`+'<br>щоб почати нову гру оновіть сторінку'.fontsize(4);
        setTimeout(() => htmlboyApearance(equalPhrases[Math.floor(Math.random()*(equalPhrases.length-1))], 'confused'), 1000);  
    }

    function htmlboyApearance(text, emotion){
        gameResult_div.style.display='block';
        $('.htmlboy').html(` <img src="images/htmlboy/`+emotion+`.png">
        <p>
        `+text+`
        </p>
        <button id="nextA" class="blue-button" >Та добре, тільки закрийся вже!</button> `).fadeIn(200);
        $('#nextA').on('click',function(){
            $('.htmlboy').hide();
            arr.shift();
           });
        
    }
    
   }
    
}

    function main(duration) {
        rounds_div.style.display='none';
        gameDuration=duration;
            r_div.addEventListener('click', () => game('rock'));
            p_div.addEventListener('click', () => game('paper'));
            s_div.addEventListener('click', () => game('scissors'));
            
        }


    fiveRounds_button.addEventListener('click', () => main(5));
        tenRounds_button.addEventListener('click', () => main(10));
        twentyRounds_button.addEventListener('click', () => main(20));
        fiftyRounds_button.addEventListener('click', () => main(50));
