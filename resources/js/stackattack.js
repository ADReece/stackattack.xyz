import hs1 from '../sounds/heartsteel.mp3';
import hs2 from '../sounds/heartsteel2.ogg';
import hs3 from '../sounds/heartsteel3.ogg';

const sfx = [
    new Audio(hs1),
    new Audio(hs2);
    new Audio(hs3);
]
document.getElementById('bonk').addEventListener('click', () => {
    var sound = Math.floor(Math.random() * sfx.length);
    audio.play(sound);
});