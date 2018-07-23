
push:
	git add --all
	git commit --amend --no-edit
	git push --force
	git tag -d v0.1.0
	git push --delete origin v0.1.0
	git tag -as v0.1.0 -m "initial portage"
	git push --tags

