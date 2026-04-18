import { useState } from 'react';
import { Button } from "@/components/ui/button";

export default function App() {
    const [count, setCount] = useState(0);

    return (
        <>
            <h1>Hello</h1>

            <div>
                <Button onClick={() => setCount((count) => count + 1)}>increment</Button>
                <p>count is {count}</p>
            </div>
        </>
    );
}