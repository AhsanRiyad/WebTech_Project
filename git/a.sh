alias add='git add -A'
alias commit='git commit -m "commit by alias" -m "this is used for short cut puspose"'
alias push='git push --all origin'
alias all='git add -A; git commit -m "commit by alias" -m "this is used for short cut puspose"; git push --all origin'
alias c='clear'
cat /dev/null > ~/.bash_history # delete history from files
history -c # clears current history but keeps it in the file so that it can retrieve again
clear