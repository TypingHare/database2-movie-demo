## Course Project

In this course, you are required to work in teams to develop a simple university management system. In Phase 1, you have designed and drawn an E/R diagram for the database schema. In Phase 2, you will implement a set of API endpoints to handle HTTP requests, along with web pages that demonstrate interactions with the database. In Phase 3, you will develop an Android application that consumes the API endpoints created in Phase 2.

To simplify grading, you must use the database schema defined in [project/sql/DB2-tables.sql](./sql/DB2-tables.sql). You are **not allowed to** remove any tables or modify the existing table schemas. However, you are encouraged to extend the database by adding new tables, attributes, and other database objects (e.g., triggers, constraints, views, indexes, etc.).

### Use Git and GitHub

In this course, you are required to use Git and GitHub to collaborate with your teammates and manage your project. If you have not used them before, please install [Git][1] and create a [GitHub account] first.

Git is a version control system that helps you track and manage changes to source code during software development, while GitHub is a cloud-based platform where developers host, share, and collaborate on their code. Today, being proficient with Git is considered a fundamental skill in a lot of software engineering roles. In addition, many companies review applicants’ GitHub profiles as part of the hiring process.

In this project, one team member (hereafter referred to as the "leader") is required to [create a private Git repository][3]. You are not allowed to change it to public until the semester ends. The leader must then invite the other team members and the grader (i.e., me) to the repository (refer to [this page][4] for more information). I will **not** push any commits to your repositories.

The repository directory structure must be as follows:

```bash
.
├── phase2                  # Phase 2 root directory
│   ├── sql                 # SQL files
│   │   ├── DB-tables.sql   # SQL file provided in this repository
│   │   ├── DB-extra.sql    # SQL file containing your own data schema statements
│   │   └── DB-data.sql     # SQL file containing insertion statements used to populate the database
│   ├── README.md           # Specific documentation for phase 2
│   └── ...                 # Other files
├── phase3                  # Phase 3 root directory
│   ├── README.md           # Specific documentation for phase 3
│   └── ...                 # Other files
└── README.md               # Project README file containing team member information
```

If you have not used Git before, you may find it a bit tricky. If you do not use Git commands correctly, you might accidentally delete some of your files (I did when I first used it). Therefore, I recommend learning the fundamentals of Git through a YouTube video or on [W3Schools][5]. Feel free to ask me in class if you have any questions about Git.

Git automatically records the commit time and the lines of code in each commit. With some advanced plugins, I can see which lines were added or edited by each person, and I can also check whether commits were submitted late. In addition, I will use a tool called [git-fame][6] to review each team member’s contributions. An example output of git-fame is shown below:

```text
| Author       |   loc |   coms |   files|  distribution   |
|:-------------|------:|-------:|-------:|:----------------|
| James Chen   | 10117 |    183 |    153 | 76.1/61.2/71.5  |
| Alexis       |  1717 |     41 |     31 | 12.9/13.7/14.5  |
| Victor Ruest |  1461 |     50 |     29 | 11.0/16.7/13.6  |
```

I will not evaluate you based on the number of lines of code (LOC) you contribute. However, if your contribution is fewer than 200 lines or so, I will take a closer look at your work. You may use AI to help write some of your code, but not all of it. You are encouraged to write the code yourself to gain experience in development, debugging, and maintenance. If you rely on AI to write all your code in school, you may lose your core competitive edge as a computer science student.

[1]: https://git-scm.com/install/windows
[2]: https://github.com/
[3]: https://docs.github.com/en/repositories/creating-and-managing-repositories/quickstart-for-repositories
[4]: https://docs.github.com/en/repositories/managing-your-repositorys-settings-and-features/repository-access-and-collaboration/inviting-collaborators-to-a-personal-repository
[5]: https://www.w3schools.com/git/
[6]: https://github.com/casperdcl/git-fame
