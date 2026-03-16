# More About Git

## Set Up Global Name

Use the following two commands to check the Git username and email associated with your configuration.

```bash
git config user.name
git config user.email
```

If you have not yet set your Git username and email, you can configure them using the following commands:

```bash
git config --global user.name "Your name"
git config --global user.email "youremail@example.com"
```

## Git Commits

In Git, when you create a commit using the `git commit` command, the timestamp of the commit is recorded, and every line of code that is added or modified is tracked.

Graders will evaluate your project within one week after the deadline. During grading, they will check out the **last commit made before the deadline**. Therefore, any lines of code committed after the deadline will be completely ignored.

Note that you may push your commits after the deadline, provided that the commits themselves were created before the deadline. Such commits will still be evaluated. However, you must email the instructor to explain the reason for the late push.

## Checkpoint

- [x] I have set up my Git username and user email.
- [x] I know the deadlines for Phase 2 (Mar 30, 2026, 3:30 p.m.).
- [x] I understand that the commits created after the deadlines will be ignored.