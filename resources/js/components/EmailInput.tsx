import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { useTranslation } from 'react-i18next';

export default function EmailInput() {
    const { t } = useTranslation();

    return (
        <div className="space-y-2">
            <Label htmlFor="email">{t('email')}</Label>
                <Input
                    id="email"
                    type="email"
                    placeholder="you@example.com"
                    required
                />
        </div>
    );
}