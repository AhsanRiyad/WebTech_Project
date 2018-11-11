# for cloing a repo
git clone PaseYourURLhere #don't forget to use SSH url to your convenient


# git status; to check if there is any update done
git status


# git log; to check the list of commit done
git log


# to add all files and commit
git add -A 

git commit -m "write your commit name here"  

git commit -m "write your commit name here"  -m "write your commit description here" # if you want to add a description of your commit, but this part is optional.

git push -u origin master # master is your branch name here, you need to use your current branch name.

# to add and commit at the same time if the files are already in your directory
git commit -am "write your comment here"




# git pull; to keep our directory updated if not
git pull origin master #master is your branch name here, you need to use your current branch name.

# to revert a commit
git revert PaseYourCommitNumberHere

# git branch
git branch # to check number of available branch (hosted locally)
git branch -r # to check number of available branch (hosted remotely on a server)

git branch BranchNameHere # to create a new branch

# after creating a branch, you must push it to server so that it can be added to the server, otherwise it will be hosted only locally

git push --all origin # to push all branch at the same time. execute this command after you create a branch.


git checkout BranchNameHere # to switch your branch

gt branch -D BranchNameHere # to delete a desired branch from local( local means Your computer)
git branch origin --delete YourBranchName # to delete remote branch (remote means server like github ) 


# git hard reset; to move back to a particular 

git reset --hard PaseYourCommitNumberHere

git push --force origin master #master is your branch name here, you need to use your current branch name.



