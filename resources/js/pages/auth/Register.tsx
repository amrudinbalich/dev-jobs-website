import { Card, CardContent, CardHeader, CardTitle, CardDescription } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";
import { Label } from "@/components/ui/label";
import { Checkbox } from "@/components/ui/checkbox";

export default function RegisterScreen() {
  return (
    <div className="flex min-h-screen flex-col items-center justify-center bg-muted/40 px-4">
      {/* Page Title */}
      <div className="mb-6 text-center">
        <h1 className="text-3xl font-bold tracking-tight">Create account</h1>
        <p className="text-sm text-muted-foreground">
          Fill in the details below to get started
        </p>
      </div>

      {/* Card */}
      <Card className="w-full max-w-md shadow-xl">
        <CardHeader className="space-y-1">
          <CardTitle className="text-2xl">Register</CardTitle>
          <CardDescription>
            Enter your information to create an account
          </CardDescription>
        </CardHeader>

        <CardContent>
          <form className="space-y-5">
            <div className="space-y-2">
              <Label htmlFor="email">Name</Label>
              <Input
                id="name"
                type="text"
                placeholder="John Doe"
                required
              />
            </div>

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

            <div className="flex items-center space-x-2">
              <Checkbox id="terms" />
              <label
                htmlFor="terms"
                className="text-sm text-muted-foreground"
              >
                I agree to the terms and conditions
              </label>
            </div>

            <Button className="w-full" type="submit">
              Create Account
            </Button>

            <p className="text-center text-sm text-muted-foreground">
              Already have an account?{' '}
              <a href="/login" className="underline underline-offset-4 hover:text-primary">
                Login
              </a>
            </p>
          </form>
        </CardContent>
      </Card>
    </div>
  );
}
