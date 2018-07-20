
push:
	git add --all
	git commit --amend --no-edit
	git push --force
	git tag -d v1.0.0
	git push --delete origin v1.0.0
	git tag -as v1.0.0 -m "initial release"
	git push --tags

