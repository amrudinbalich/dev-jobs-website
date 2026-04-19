import { Card, CardContent, CardHeader, CardTitle, CardDescription } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";
import { Label } from "@/components/ui/label";
import { useTranslation } from 'react-i18next';

export default function LoginScreen() {
    const { t } = useTranslation();

    return (
        <div className="flex min-h-screen flex-col items-center justify-center bg-muted/40 px-4">
        {/* Page Title */}
        <div className="mb-6 text-center">
            <h1 className="text-3xl font-bold tracking-tight">{t('login.helloUser')}</h1>
            <p className="text-sm text-muted-foreground">
            {t('login.signInPrompt')}
            </p>
        </div>

        {/* Card */}
        <Card className="w-full max-w-md shadow-xl">
            <CardHeader className="space-y-1">
            <CardTitle className="text-2xl">{t('login.title')}</CardTitle>
            <CardDescription>
                {t('login.cardDescription')}
            </CardDescription>
            </CardHeader>

            <CardContent>
            <form className="space-y-5">
                <div className="space-y-2">
                <Label htmlFor="email">{t('login.email')}</Label>
                <Input
                    id="email"
                    type="email"
                    placeholder="you@example.com"
                    required
                />
                </div>

                <div className="space-y-2">
                <Label htmlFor="password">{t('login.password')}</Label>
                <Input id="password" type="password" placeholder="••••••••" required />
                </div>

                <Button className="w-full" type="submit">
                    {t('login.submit')}
                </Button>

                <p className="text-center text-sm text-muted-foreground">
                    {t('login.noAccountPrompt')}{' '}
                    <a href="/register" className="underline underline-offset-4 hover:text-primary">
                        {t('login.registerLink')}
                    </a>
                </p>
            </form>
            </CardContent>
        </Card>
        </div>
    );
}
