import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { useTranslation } from 'react-i18next';

export default function PasswordInput() {
    const { t } = useTranslation();

    return (
        <div className="space-y-2">
            <Label htmlFor="password">{t('login.password')}</Label>
                <Input
                    id="password"
                    type="password"
                    placeholder="••••••••"
                    required
                />
        </div>
    );
}