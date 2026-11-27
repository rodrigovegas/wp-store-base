\# Environment workflow



Three environments, one codebase (this repository).



| | Local | Staging | Production |

|---|---|---|---|

| Purpose | Develop and test changes | Verify a release in a production-like site | Live store |

| Who changes it | Developer | Developer, by deploying a tagged release | Developer, only after staging sign-off |

| WP\_ENVIRONMENT\_TYPE | local | staging | production |

| Payment keys | Test | Test | Live |

| Search engines | n/a | Blocked (noindex) | Allowed |

| Analytics | Off | Off or separate property | Live property |

| Debug | On | On, log only | Off |

| Data | Sample | Copy of production | Real |



\## Rules

1\. Code moves up (local -> staging -> production). Content moves down. Never push a local database to production.

2\. Base code is never edited on a site. Fix it here, tag it, deploy it.

3\. Secrets (keys, IDs) live in each environment's wp-config.php, never in this repository.

4\. Every change reaches staging before production.



\## Release steps

1\. Branch from main, change, commit with a clear message.

2\. Merge to main and tag the version (for example v1.0.3).

3\. Staging: pull the tag and run the checklist below.

4\. Production: back up, pull the same tag, smoke test.

5\. Roll back: check out the previous tag and restore the backup if data changed.



\## Staging checklist

\- Home, shop, product, cart and checkout load without errors.

\- axe and Lighthouse show no new issues on those pages.

\- A test purchase succeeds and a declined card leaves no stuck order.

\- Search engines are blocked on staging.



\## Applying a base fix to every site

Each site runs git pull (or checks out the new tag) in wp-content. No manual copying.

