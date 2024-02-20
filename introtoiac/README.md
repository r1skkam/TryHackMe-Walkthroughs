### 17-Feb-24-Sat

[TryHackMe | Intro to IaC](https://tryhackme.com/room/introtoiac)

## Intro to IaC

*An introduction to infrastructure as code.*

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/92996485-db9c-4159-8e40-546562538f4a)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b8e3e204-a97e-4b86-ab45-afef9d5a66ae)

**Scalable**, **Versionable** and **Repeatable**

declarative and imperative (also known as functional and procedural) IaC tools

Examples of declarative IaC tools are Terraform, AWS CloudFormation, Pulumi and Puppet (Ansible also supports declarative).

Examples of imperative IaC tools: Chef is the best example of an imperative tool; however, SaltStack and Ansible both support imperative programming as well.

Agent-based IaC tools: Puppet, Chef, and Saltstack.

Agentless IaC tools: Terraform, AWS CloudFormation, Pulumi and Ansible.

**Terraform:** is a declarative, agentless infrastructure provisioning tool that works with immutable infrastructure. Terraform is one of the most popular infrastructure provisioning tools out there, allowing for the management of infrastructure across multiple cloud providers like AWS, GCP and Azure.

**Ansible:** is a hybrid, typically agentless configuration management tool that works with mutable infrastructure. Another example of a massively popular tool in the DevSecOps space. It's slightly harder to categorise than some of the other tools, because of how this tool functions and what it does can depend on how you employ it. For example, there is much discussion over whether Ansible is an imperative or declarative tool. In reality, Ansible is sort of a hybrid in a sense.

**Pulumi:** is a declarative, agentless infrastructure provisioning tool that works with immutable infrastructure. Pulumi is similar in nature to Terraform but has become increasingly popular in recent years due to its ability to let users define their desired infrastructure using familiar general-purpose languages like Python, JavaScript, Go, Java and markup languages like YAML.

**Aws CloudFormation:** is a declarative, agentless infrastructure provisioning tool which can be used to implement an immutable infrastructure on AWS. This is an AWS-managed service and provisions AWS cloud resources using JSON / YAML templates.

**Chef:** is an imperative, agent-based configuration management tool that works with mutable infrastructure. Chef gets an infrastructure to a desired state by running a series of instructions contained in a file referred to as a 'Recipe'; a collection of these files is referred to as a 'Cookbook'.

**Puppet:** is a declarative, agent-based configuration management tool that works with mutable infrastructure. In Puppet, you define the desired configuration state using their own domain-specific language (DSL), "Puppet Code"; Puppet then automates this configuration through a Puppet primary server and agent.

```
THM{l4b_C0mpl3x_co0rds}
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/39a9af9c-d07f-4c99-91f8-91754be669f8)

*The Continual (Best Practice) Phases*

*The Repeatable (Infra Creation + Config) Phases*


