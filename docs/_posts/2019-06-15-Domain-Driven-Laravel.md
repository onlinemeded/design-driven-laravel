---
layout: default
title: "Domain Driven Laravel"
---

> So much complexity in software comes from trying to make one thing do two things.
- Ryan Singer [[source](https://signalvnoise.com/posts/2316-so-much-complexity-in-software-comes-from)]

Those familiar with MVC architecture tend to understand that the objective is to keep meaningful business logic out of the views, keep controllers thin, and have fat models. When you're familiar with MVC, or a particular framework that implements the architecture, it can be easy to skip over the simpler implementations in exchange for the *massive* headroom and perhaps the speed of implementation of the first iteration that comes with said familiarity. In the beginning, MVC *feels* roomy... plenty of space to grow, you know exactly what goes where and life is good.

What if the system keeps evolving and growing?

Laravel's particular flavor of MVC helps lift the ceiling on this phase of an application's growth through its provision of exquisite application services in Cache, Events & Listeners, Mail, Notifications, Jobs & Queues, and Commands & Scheduling. Even when these services are effectively leveraged within a large and complex system it is the implicit direct connection between the Model and the underlying data (whether or not consciously understood as Active Record) that becomes a hazard and limitation both on growth and development velocity over time.

Reflect on the analogy in Henrik Kniberg's illustration of MVP product development. Looking at the image as a software developer, *starting* with Laravel is like starting with the bicycle having tooling already in place to get to the motorcycle. For *many* applications this set of tools is perfect, even overkill, for the purpose. However, as an application begins to grow beyond the motorcycle stage, tacit architectural accommodations are made not for the project at hand but for the sake of Laravel itself. 

We tend to hold onto the tooling that got us here in spite of the fact that the challenges we face today are fundamentally different, let alone those we face tomorrow. A major pitfall of Laravel’s implementation starts and ends with just how simple it makes bootstrapping new ideas when considering its use case for long-lived, ever-evolving projects. 

This project, Domain Driven Laravel, is an attempt to bridge the gap and reduce the complexity necessary when directing the evolution of a monolithic application into one based on Domain Driven Design through the implementation of a Service Oriented Architecture *within* Laravel.

Laravel could be viewed as the best one-man-band in the world. Domain Driven Laravel is for those projects with orchestral ambition.
