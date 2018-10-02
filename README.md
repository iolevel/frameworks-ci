# frameworks-ci

Stubs for building and testing various PHP frameworks with PeachPie.

Files specific to each framework are located in their respective folder.
They are expected to be copied to a folder containing the particular framework, possibly overwriting some of its files.

The `project.msbuildproj` file is expected there, as it allows to build the framework using MSBuild and PeachPie.
Version of PeachPie compiler and runtime packages can be specified as `$(PeachpieVersion)` property.
