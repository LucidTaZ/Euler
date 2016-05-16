name := """euler"""

version := "1.0-SNAPSHOT"

scalaVersion := "2.11.7"

scalaSource in Compile := baseDirectory.value / "src"

scalaSource in Test := baseDirectory.value / "tests"

libraryDependencies ++= Seq("org.specs2" %% "specs2-core" % "3.8.2" % "test")

// Compile the project before generating Eclipse files, so that generated .scala or .class files for views and routes are present
EclipseKeys.preTasks := Seq(compile in Compile)
EclipseKeys.withSource := true
