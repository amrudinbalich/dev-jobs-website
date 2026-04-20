import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { useTranslation } from 'react-i18next';

export default function NameInput() {
    const { t } = useTranslation();
    
    return (
        <div className="space-y-2">
            <Label htmlFor="name">{t('login.name')}</Label>
                <Input
                    id="name"
                    type="text"
                    placeholder="John Doe"
                    required
                />
        </div>
    );
}