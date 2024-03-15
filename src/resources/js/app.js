import './bootstrap';
import Alpine from 'alpinejs';
import hljs from 'highlight.js';
import 'highlight.js/styles/github.css';
window.Alpine = Alpine;

Alpine.start();
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightElement(block);
    });
});
