# Phase 3 Guidelines

While grading your Phase 2 submissions, I noticed that many of you had the following issues:

1. **Too few helper and utility functions.** Many of you wrote very long functions without comments, which makes the code difficult for others to understand. You should break your code into smaller functions and add comments to explain what each function does. This will make your code more readable and easier to debug.
2. **Executing simple SQL queries too often.** Many of you were using simple SQL queries to fetch data from the database and then doing a lot of data processing in PHP. This is acceptable in some cases, and even recommended in certain situations (for example, when you need to join multiple tables without indexes). However, in many cases, you can take better advantage of SQL to write more complex queries and reduce the amount of data processing needed in PHP.
3. **Using only a single layer.** In a real-world application, there are multiple layers of abstraction, and each pair of layers should interact only through well-defined interfaces. Although this is a course project, I think you should have at least two layers: a presentation layer (for example, HTML code) and a data access layer (for example, PHP code that interacts with the database). A business logic layer (or service layer), which connects the presentation layer and the data access layer, is also recommended.
4. **Using a flat directory structure.** You can organize files into different directories based on their functionality. For example, you can have a `helper` directory for helper functions, a `service` directory for business logic, and a `data_access` directory for database interactions. The exact directory structure is up to you, but you should explain your thought process and design decisions in the `README.md` file.
5. **Typos and avoidable logic issues.** Please start using AI agents to review your code before submission. Using AI agents is not cheating or wrong. They can be good partners in identifying issues in your codebase and helping you improve code quality.

I recommend that you do the following:

1. Refactor your Phase 2 codebase to prepare for Phase 3.
2. Add more helper and utility functions to make your code more modular and easier to understand.
3. Include all of your **critical thinking and design decisions** in the `README.md` file (or in files under the `docs` directory).
4. Use guard statements; reduce levels of nesting.
5. Use Codex, Claude, or other AI agents to review your code and improve its quality before submission.

**Extra credit** will be given if you follow best practices in software engineering and demonstrate innovative design with critical thinking.
