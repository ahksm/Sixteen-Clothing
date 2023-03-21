<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="auth">
                <a class="navbar-brand" href="/">
                    <h2>Sixteen <span>Clothing</span></h2>
                </a>
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div x-data="{ loading: false }">
            <form method="POST" action="{{ route('password.email') }}" @submit.prevent="submitForm">
                @csrf
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>
                <div class="flex items-center justify-between mt-4">
                    <a href="/login" style="background-color: rgb(248 113 113);" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition ease-in-out duration-150">Back</a>
                    <button type="submit" x-text="loading ? 'Loading...' : 'Email Password Reset Link'"
                        :disabled="loading"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"></button>
                </div>
            </form>

            <script>
                function submitForm() {
                    this.loading = true;

                    // Submit form data
                    this.$el.submit();
                }
            </script>
        </div>
    </x-auth-card>
</x-guest-layout>
