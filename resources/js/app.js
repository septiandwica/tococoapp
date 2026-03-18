import './bootstrap';
import { createIcons, icons } from 'lucide';

const initLucide = () => {
    createIcons({ icons });
};

document.addEventListener('DOMContentLoaded', initLucide);
document.addEventListener('livewire:navigated', initLucide);
