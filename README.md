# frameworks-ci
Stubs for building and testing various PHP frameworks with Peachpie.

Files specific to each framework are located in their respective folder.
They are expected to be copied to a folder containing the particular framework, possibly overwriting some of its files.

The `project.msbuildproj` file is expected there, as it allows to build the framework using MSBuild and Peachpie.
Versions of Peachpie packages must be specified as `Version="$(PeachpieVersion)"` so that a concrete version can be specified as a parameter of the build process.

> NOTE: Currently, `dotnet build project.msbuildproj /p:PeachpieVersion=x.y.z-*` doesn't work because of an issue with calling the compiler tool.
> Therefore, `$(PeachpieVersion)` is expected to be changed to a particular version by a simple string replacement mechanism before the compilation.
