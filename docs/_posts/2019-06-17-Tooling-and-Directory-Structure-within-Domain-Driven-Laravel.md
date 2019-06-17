---
layout: default
title: "Tooling and Directory Structure of Domain Driven Laravel"
---

## Concepts

Command Query Responsibility Segregation (CQRS)
Repositories
Entities
Value Objects
Factories

## Directory Structure
```
SomeContext
+--Commands (warning: Laravel naming convention collision Laravel Command vs DDL Command)
+--Queries (warning: Laravel naming convension collision Laravel Eloquent Query vs DDL Query)
+--Repositories
+--ValueObjects
+--Factories
+--Providers (Laravel integration mechanism)
+--Facades (Laravel integration mechanism)
```
