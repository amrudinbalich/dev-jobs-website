import { Card, CardContent, CardHeader, CardTitle, CardDescription } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";
import { Label } from "@/components/ui/label";

export default function LoginScreen() {
  return (
    <div className="flex min-h-screen flex-col items-center justify-center bg-muted/40 px-4">
      {/* Page Title */}
      <div className="mb-6 text-center">
        <h1 className="text-3xl font-bold tracking-tight">Hello User</h1>
        <p className="text-sm text-muted-foreground">
          Sign in to your account to continue
        </p>
      </div>

      {/* Card */}
      <Card className="w-full max-w-md shadow-xl">
        <CardHeader className="space-y-1">
          <CardTitle className="text-2xl">Login</CardTitle>
          <CardDescription>
            Enter your email and password below
          </CardDescription>
        </CardHeader>

        <CardContent>
          <form className="space-y-5">
            <div className="space-y-2">
              <Label htmlFor="email">Email</Label>
              <Input
                id="email"
                type="email"
                placeholder="you@example.com"
                required
              />
            </div>

            <div className="space-y-2">
              <Label htmlFor="password">Password</Label>
              <Input id="password" type="password" placeholder="••••••••" required />
            </div>

            <Button className="w-full" type="submit">
              Sign In
            </Button>

            <p className="text-center text-sm text-muted-foreground">
              Don’t have an account?{' '}
              <a href="/register" className="underline underline-offset-4 hover:text-primary">
                Register
              </a>
            </p>
          </form>
        </CardContent>
      </Card>
    </div>
  );
}
