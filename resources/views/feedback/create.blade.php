<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section class="py-6">
    <div class="w-1/2 max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('feedback.store') }}" method="post" class="mb-6">
        @csrf
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <label for="name">Name:</label>
            <textarea id="name" name="name" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
          rows="1" required></textarea>
        </div>
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <label for="email">Email:</label>
            <textarea id="email" name="email" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
          rows="1" required></textarea>
        </div>
        <div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                placeholder="Provide a feedback..."  rows="6" required></textarea>
        </div>
        <button type="submit"
             class="inline-flex items-center py-3 px-5 text-l font-medium text-center text-white bg-indigo-600 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-600">
            Send Feedback
        </button>
        <button href='https://buymeacoffee.com/'
             class="inline-flex items-center py-3 px-5 text-l font-medium text-center text-white bg-indigo-600 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-600">
            Buy us a coffee
        </button>
            </form>
        </div>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>