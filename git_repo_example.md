# git repo example

```bash
git init
echo file_to_commit > file_to_commit
git add file_to_commit
git commit -m "Initial commit"
curl https://norvig.com/big.txt -o big.txt
git add big.txt
git commit -m "Add big file"
echo fix >> big.txt
git add big.txt
git commit -m "Change big file"
echo fix > dangling_file
git add dangling_file
git reset HEAD dangling_file
rm dangling_file
echo useless_fix > big.txt
git commit -m "Useless fix"
git reset HEAD~1 --hard
```
