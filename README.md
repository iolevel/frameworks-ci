# frameworks-ci
Stubs for building and testing various PHP frameworks with Peachpie.

Files specific to each framework are located in their respective folder.
They are expected to be copied to a folder containing the particular framework, possibly overwriting some of its files.
The `project.msbuildproj` file is expected there, as it allows to build the framework using MSBuild and Peachpie.
