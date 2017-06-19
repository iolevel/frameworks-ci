# frameworks-ci
Stubs for building and testing various PHP frameworks with Peachpie.

Artifacts specific to each framework are located in their respective folder.
A framework is expected to be downloaded and unpacked directly to its folder.
Each folder contains the following files and folders:

* `postdownload_patch` - the files in this folder are expected to be moved to the framework's folder after it is downloaded and unpacked, possibly owerwriting the existing ones with the same names
* `project.msbuildproj` - a project file for MSBuild to build the framework with Peachpie
