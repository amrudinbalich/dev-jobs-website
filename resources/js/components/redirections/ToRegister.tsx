import { useTranslation } from 'react-i18next';

export default function ToRegister() {
    const { t } = useTranslation();

    return (
        <p className="text-center text-sm text-muted-foreground">
            {t('noAccountPrompt')}{' '}
            <a href="/register" className="underline underline-offset-4 hover:text-primary">
                {t('registerLink')}
            </a>
        </p>
    );
}