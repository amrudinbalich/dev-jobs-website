import { Button } from '@/components/ui/button';

export default function Home() {
    return (
        <div>
            <h1>Home</h1>
            <Button onClick={() => console.log('Button clicked!')}>Click me</Button>
        </div>
    );
};