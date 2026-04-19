import i18n from 'i18next';
import { initReactI18next } from 'react-i18next';

i18n.use(initReactI18next).init({
    lng: 'en',
    fallbackLng: 'en',
    resources: {
        en: {
            translation: {
                login: {
                    title: 'Login',
                    email: 'Email',
                    password: 'Password',
                    submit: 'Sign in',
                    helloUser: 'Hello User',
                    signInPrompt: 'Sign in to your account to continue',
                    noAccountPrompt: 'Don’t have an account?',
                    registerLink: 'Register',
                }
            }
        },
        bs: {
            translation: {
                login: {
                    title: 'Prijava',
                    email: 'Email',
                    password: 'Lozinka',
                    submit: 'Prijavi se',
                }
            }
        },
    }
});

export default i18n;