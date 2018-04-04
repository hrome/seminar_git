# git commands

### Objects
* cat-file           -- provide content or type information for repository objects
* count-objects      -- count unpacked objects and display their disk consumption
* hash-object        -- compute object ID and optionally create a blob from a file
* mktree             -- build tree-object from git ls-tree formatted text
* commit-tree        -- create new commit object
* diff-tree          -- compare content and mode of blobs found via two tree objects
* ls-tree            -- list contents of a tree object

### Index
* ls-files           -- information about files in index/working directory
* read-tree          -- read tree information into directory index
* diff-files         -- compare files in working tree and index
* diff-index         -- compare content and mode of blobs between index and repository
* update-index       -- register file contents in the working directory to the index
* write-tree         -- create tree from the current index

### Revision selection
* name-rev           -- find symbolic names for given revisions
* rev-list           -- list commit object in reverse chronological order
* show               -- show various types of objects
* rev-parse          -- pick out and massage parameters for other git commands
* symbolic-ref       -- read and modify symbolic references
* show-ref           -- list references in a local repository

### Packs
* prune              -- prune all unreachable objects from the object database
* fsck               -- verify connectivity and validity of objects in database
* gc                 -- cleanup unnecessary files and optimize local repository
* verify-pack        -- validate packed git archive files
