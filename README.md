# miniChatGPT_Laravel

A small chatbot application built with Laravel and the OpenAI ChatGPT model.

## Features
- User input is processed by the ChatGPT model to generate a response
- Integration with Laravel for a seamless user experience
- Simple and intuitive interface for interacting with the chatbot

## Installation
1. Clone the repository: `git clone https://github.com/GasyCoder/miniChatGPT_Laravel.git`
2. Install dependencies: `composer install`
3. Configure the .env file with your database and OpenAI API credentials that allows you to interact with the `Open AI API`.
4. Run migrations: `php artisan migrate`
5. Start the development server: `php artisan serve`

## Usage
- Navigate to `http://localhost:8000` in your web browser
- Enter a question or statement in the input field and press "Send"
- The chatbot will generate a response based on the ChatGPT model
- For usage examples, take a look at the `openai-php/client` repository.

## Contributions
We welcome contributions to this project. If you find a bug or have an idea for a new feature, please open an issue or submit a pull request.

OpenAI PHP for Laravel is an open-sourced software licensed under the `MIT license`.
