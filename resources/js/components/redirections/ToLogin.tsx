export default function ToLogin() {
    return (
        <p className="text-center text-sm text-muted-foreground">
              Already have an account?{' '}
              <a href="/login" className="underline underline-offset-4 hover:text-primary">
                Login
              </a>
        </p>
    );
}