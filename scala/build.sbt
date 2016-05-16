name := """euler"""

version := "1.0-SNAPSHOT"

scalaVersion := "2.11.7"

scalaSource in Compile := baseDirectory.value / "src"

libraryDependencies ++= Seq(
//  cache,
//  ws,
//  specs2 % Test,
//  "com.typesafe.play" %% "play-slick" % "1.1.1",
//  "com.typesafe.play" %% "play-slick-evolutions" % "1.1.1",
//  "org.slf4j" % "slf4j-nop" % "1.6.4",
//  "com.h2database" % "h2" % "1.3.148"
)

//resolvers += "scalaz-bintray" at "http://dl.bintray.com/scalaz/releases"

// Compile the project before generating Eclipse files, so that generated .scala or .class files for views and routes are present
EclipseKeys.preTasks := Seq(compile in Compile)
EclipseKeys.withSource := true
