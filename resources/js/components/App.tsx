import { useState } from 'react';

export default function App() {
    const [count, setCount] = useState(0);

    return (
        <>
            <h1>Hello</h1>

            <div>
                <button onClick={() => setCount((count) => count + 1)}>increment</button>
                <p>count is {count}</p>
            </div>
        </>
    );
}