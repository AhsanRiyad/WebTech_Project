alias a='git add -A'
alias c='git commit -m '
alias p='git push --all origin'
alias all='git add -A; git commit -m "commit by alias" -m "this is used for short cut puspose"; git push --all origin'
alias s='git status'
alias l='git log'
alias clr='clear'
cat /dev/null > ~/.bash_history # delete history from files
history -c # clears current history but keeps it in the file so that it can retrieve again
clear