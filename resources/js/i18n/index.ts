import i18n from 'i18next';
import { initReactI18next } from 'react-i18next';

i18n.use(initReactI18next).init({
    lng: 'en',
    fallbackLng: 'en',
    resources: {
        en: {
            translation: {
                title: 'Login',
                email: 'Email',
                password: 'Password',
                submit: 'Submit',
                helloUser: 'Hello User',
                signInPrompt: 'Sign in to your account to continue',
                noAccountPrompt: 'Don’t have an account?',
                registerLink: 'Register',
                name: 'Name',
                login: {
                    title: 'Login',
                    email: 'Email',
                    password: 'Password',
                    submit: 'Sign in',
                    helloUser: 'Hello User',
                    signInPrompt: 'Sign in to your account to continue',
                    noAccountPrompt: 'Don’t have an account?',
                    registerLink: 'Register',
                    name: 'Name',
                },
                register: {
                    createAccount: 'Create Account',
                    createAccountDescription: 'Fill in the details below to get started',
                    register: 'Register',
                    registerDescription: 'Enter your information to create an account',
                    submit: 'Create Account',
                    haveAccountPrompt: 'Already have an account?',
                    loginLink: 'Login',
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