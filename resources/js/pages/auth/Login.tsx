import { Card, CardContent, CardHeader, CardTitle, CardDescription } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";
import { Label } from "@/components/ui/label";
import { useTranslation } from 'react-i18next';

import EmailInput from "@/components/EmailInput";
import PasswordInput from "@/components/PasswordInput";
import ToRegister from "@/components/redirections/ToRegister";

export default function LoginScreen() {
    const { t } = useTranslation();

    return (
        <div className="flex min-h-screen flex-col items-center justify-center bg-muted/40 px-4">
            {/* Page Title */}
            <div className="mb-6 text-center">
                <h1 className="text-3xl font-bold tracking-tight">{t('helloUser')}</h1>
                <p className="text-sm text-muted-foreground">{t('signInPrompt')}</p>
            </div>

            {/* Card */}
            <Card className="w-full max-w-md shadow-xl">
                <CardHeader className="space-y-1">
                    <CardTitle className="text-2xl">{t('title')}</CardTitle>
                    <CardDescription>{t('cardDescription')}</CardDescription>
                </CardHeader>

                <CardContent>
                    <form className="space-y-5">
                        <EmailInput />

                        <PasswordInput />

                        <Button className="w-full" type="submit">
                            {t('submit')}
                        </Button>

                        <ToRegister />
                    </form>
                </CardContent>
            </Card>
        </div>
    );
}
