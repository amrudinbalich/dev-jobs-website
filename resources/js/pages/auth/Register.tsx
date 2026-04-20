import { Card, CardContent, CardHeader, CardTitle, CardDescription } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";
import { Label } from "@/components/ui/label";
import { Checkbox } from "@/components/ui/checkbox";
import { useTranslation } from 'react-i18next';

import NameInput from "@/components/inputs/Name";
import EmailInput from "@/components/inputs/Email";
import PasswordInput from "@/components/inputs/Password";
import AgreeOnTerms from "@/components/inputs/AgreeOnTerms";
import ToLogin from "@/components/redirections/ToLogin";

export default function RegisterScreen() {
    const { t } = useTranslation();

    return (
        <div className="flex min-h-screen flex-col items-center justify-center bg-muted/40 px-4">
            {/* Page Title */}
            <div className="mb-6 text-center">
                <h1 className="text-3xl font-bold tracking-tight">
                    {t('register.createAccount')}
                </h1>
                <p className="text-sm text-muted-foreground">
                    {t('register.createAccountDescription')}
                </p>
            </div>

            {/* Card */}
            <Card className="w-full max-w-md shadow-xl">
                <CardHeader className="space-y-1">
                    <CardTitle className="text-2xl">
                        {t('register.register')}
                    </CardTitle>
                    <CardDescription>
                            {t('register.registerDescription')}
                    </CardDescription>
                </CardHeader>

                <CardContent>
                    <form className="space-y-5">
                        <NameInput />

                        <EmailInput />

                        <PasswordInput />

                        <AgreeOnTerms />

                        <Button className="w-full" type="submit">
                            {t('register.submit')}
                        </Button>

                        <ToLogin />
                    </form>
                </CardContent>
            </Card>
        </div>
    );
}
