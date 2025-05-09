import bonk from '../sounds/heartsteel.mp3';

const audio = new Audio(bonk);
document.getElementById('bonk').addEventListener('click', () => {
    audio.play();
});