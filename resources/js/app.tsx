import './bootstrap.js';

import React from 'react';
import { createRoot } from 'react-dom/client';
import App from './components/App.js';
import '../css/app.css';
import '@/i18n';

const root = document.getElementById('root');
createRoot(root).render(<App />);